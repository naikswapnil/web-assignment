const express = require('express');
const fs = require('fs');
const app = express();

app.use(express.json());

const DB = './db.json';

// Get students
app.get('/students', (req,res)=>{
  const data = JSON.parse(fs.readFileSync(DB));
  res.json(data);
});

// Add student
app.post('/students', (req,res)=>{
  const data = JSON.parse(fs.readFileSync(DB));
  data.push(req.body);
  fs.writeFileSync(DB, JSON.stringify(data));
  res.json({message:"Added"});
});

app.listen(3000, ()=>{
  console.log('Server running on port 3000');
});
