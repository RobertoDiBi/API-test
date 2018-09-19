const express = require('express'); 
const router = express.Router();

router.get( '/', (req, res, next)=>{
    res.status(200).json({
        item: [
            {
                 id: 1,
                 name: "Montreal Canadiens",
                 average: 6.7,
                 ratingsCount: 7,
                 reviews: [
                    {
                      id: 4507,
                      title: "Best hockey team",
                      average: 9.8,
                      comment: "The purpose dries the word with an inform",
                      reviewdBy: "Michel Spicer",
                      createdDate: "2017-12-12 23:19:03"
                    },
                    {
                      id: 5863,
                      title: "This team cannot even win a game",
                      average: 5,
                      comment: "When can his tin consequence rend the treat?",
                      reviewdBy: "Joe Doe",
                      createdDate: "2018-03-25 15:09:22"
                    },
                    {
                      id: 4450,
                      title: "I am going to cheer for Toronto Maple Leafs",
                      average: 2.2,
                      comment: "The classic swallows into an injured mystic.",
                      department: "John Pebble",
                      createdDate: "2017-12-08 02:55:27"
                    }
                ]
            }
        ] 
    });
});

router.post( '/', (req, res, next)=>{
    res.status(201).json({
        message: "Post reviews items"
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
                     ratingsCount: 7,
                     reviews: [
                        {
                          id: 4507,
                          title: "Best hockey team",
                          average: 9.8,
                          comment: "The purpose dries the word with an inform",
                          reviewedBy: "Michel Spicer",
                          createdDate: "2017-12-12 23:19:03"
                        },
                        {
                          id: 5863,
                          title: "This team cannot even win a game",
                          average: 5,
                          comment: "When can his tin consequence rend the treat?",
                          reviewedBy: "Joe Doe",
                          createdDate: "2018-03-25 15:09:22"
                        },
                        {
                          id: 4450,
                          title: "I am going to cheer for Toronto Maple Leafs",
                          average: 2.2,
                          comment: "The classic swallows into an injured mystic.",
                          reviewedBy: "John Pebble",
                          createdDate: "2017-12-08 02:55:27"
                        }
                    ]
                
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