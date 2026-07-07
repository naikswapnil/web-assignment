window.addEventListener("load", () => {

    setTimeout(() => {

        document.getElementById("loader").style.display = "none";

        document.getElementById("main-content").style.display = "block";

    },1500);

});

const pin = prompt("Enter PIN");

if (pin !== "0345") {
    document.body.innerHTML = "<h1>Access Denied</h1>";
} else {
    let data=JSON.parse(localStorage.ft||'[]');const l=document.getElementById('list');const c=new Chart(document.getElementById('chart'),{type:'doughnut',data:{labels:['Income','Expense'],datasets:[{data:[0,0]}]}});function save(){localStorage.ft=JSON.stringify(data)}function render(){l.innerHTML='';let inc=0,exp=0;const q=search.value.toLowerCase();data.filter(x=>x.d.toLowerCase().includes(q)).forEach((x,i)=>{let li=document.createElement('li');li.innerHTML=`${x.d} ₹${x.a} (${x.t}) <button onclick='del(${i})'>Delete</button>`;l.appendChild(li);x.t=='Income'?inc+=x.a:exp+=x.a});bal.textContent='₹'+(inc-exp);incEl=inc;document.getElementById('inc').textContent='₹'+inc;document.getElementById('exp').textContent='₹'+exp;c.data.datasets[0].data=[inc,exp];c.update();save()}function del(i){data.splice(i,1);render()}f.onsubmit=e=>{e.preventDefault();data.push({d:desc.value,a:+amt.value,t:type.value});f.reset();render()};search.oninput=render;const themeBtn=document.getElementById("themeToggle");themeBtn.addEventListener("click",()=>{document.body.classList.toggle("dark")});render();
}
