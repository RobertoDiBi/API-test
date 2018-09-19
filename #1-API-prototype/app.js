const express = require('express'); 
const app = express();
const morgan = require('morgan');
const bodyParser = require('body-parser');

const ratingaverageRoutes = require('./api/routes/ratingaverage');
const reviewsRoutes = require('./api/routes/reviews');

app.use(morgan('dev'));
app.use(bodyParser.urlencoded({extended: false}));
app.use(bodyParser.json()); 

app.use ('/api/ratingaverage',ratingaverageRoutes);
app.use ('/api/reviews',reviewsRoutes);


//ERROR HANDLING

//invalid url error handling
app.use((req, res, next)=>{
    const error = new Error('Not found');
    error.status = 404 ;
    next(error); 
});

app.use((error, req, res, next)=>{
    res.status(error.status || 500);
    res.json({
        error:{
             message: error.message
        }
    }); 
});


module.exports = app; 