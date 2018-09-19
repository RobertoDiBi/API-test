const express = require('express'); 
const router = express.Router();

router.get( '/', (req, res, next)=>{
    res.status(200).json({
        item: [
            {
                 id: 1,
                 name: "Montreal Canadiens",
                 average: 6.7,
                 ratingsCount: 7
            }
        ] 
    });
});

router.post( '/', (req, res, next)=>{
    res.status(201).json({
        message: "Post rating average items"
    });
});

router.get( '/:itemId', (req, res, next)=>{
    const id = req.params.itemId;
    if(id === '1'){
        res.status(200).json({
            item: [
                {
                     id: 1,
                     name: "Montreal Canadiens",
                     average: 6.7,
                     ratingsCount: 7
                }
            ]          
        });
    }else{
        res.status(200).json({
            message: "Item not found"
        });
    }
    
});

module.exports = router; 