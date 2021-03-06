const express = require('express');
const routes = express.Router();
const mysql=require('mysql');



const db = mysql.createConnection({
  host: process.env.DATABASE_HOST,
  user: process.env.DATABASE_USER,
  password: process.env.DATABASE_PASSWORD,
  database: process.env.DATABASE
});

routes.get('/',(req, res) => {
  //if (req.session.email) {
     res.render('index');
  // } else {
	// 	res.send('Please login to view this page!');
	// }
});

routes.get('/dashboard', (req, res) => {
 
  if (req.session.email) {
  //console.log(name);
  db.query('SELECT * FROM register where email=?', [req.session.email], async(error,results) => {
    const username=results[0].name;
    res.render('dashboard', {sess: req.session.email, name: username});
  });
    
    //res.render("dashboard");

	} else {
		res.send('Please login to view this page!');
	}

 
});


routes.get('/logout', (req, res) => {
  req.session.destroy();
  res.redirect("/");
});

module.exports=routes;
