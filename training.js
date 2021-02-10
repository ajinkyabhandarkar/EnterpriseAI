
var natural = require('natural');
var classifier = new natural.BayesClassifier();

//Using External dataset
const data = require('./data.json');

data.forEach(item=>{
    classifier.addDocument(item.Text,item.Emotion);
  
   
})

// Train
classifier.train();
console.log(classifier);
// Apply/Predict
//console.log(classifier.classify("nausea"));

// // Persisting /Save
classifier.save('nvclassifier.json',function(err,classifier){});


