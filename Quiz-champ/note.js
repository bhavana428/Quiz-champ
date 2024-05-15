

showquestions(0);
questioncounter(1);



let questioncount=0;
let questionumb=1;


const nextbtn=document.querySelector(".next-btn");
console.log(nextbtn);
   nextbtn.onclick =next;
function next(){
   if(questioncount < questions.length-1){
      questioncount++;
      showquestions(questioncount);
      
      questionumb++;
      questioncounter(questionumb);
      nextbtn.classList.remove('active');
   }
  else{
   nextbtn.classList.remove('active');


   resultbox();
  }
}


function showquestions(index){
   const questiontext=document.querySelector(".question-text");
   questiontext.textContent=`${questions[index].numb}.${questions[index].question}`;

   let optiontag=`<div class="option-text"><span>${questions[index].options[0]}</span></div>
   <div class="option-text"><span>${questions[index].options[1]}</span></div>
   <div class="option-text"><span>${questions[index].options[2]}</span></div>
   <div class="option-text"><span>${questions[index].options[3]}</span></div>`;
   const optionlist=document.querySelector(".option-list");
optionlist.innerHTML=optiontag;

const option=document.querySelectorAll(".option-text");

let i;
for(i=0;i< option.length;i++){
   option[i].setAttribute("onclick","optionselect(this)");

}
}


let userscore=0;
function optionselect(answer){
  
   let useranswer=answer.textContent;
   let correctanswer=questions[questioncount].answer;
   const optionlist=document.querySelector(".option-list");
   let alloptions=optionlist.children.length;
   
   if(useranswer == correctanswer){
   answer.classList.add('correct');
   userscore+=1;
   
   headscore();

function headscore(){
   
   const headerscoretext=document.querySelector(".header-score"); 
   console.log(headerscoretext);
   headerscoretext.textContent=`score:${userscore}/${questions.length}`;
   var result=userscore;
   console.log(result);
   const res=document.getElementById("result");
   res.value=result;
 }
 
 
   }
   else{
      
      answer.classList.add('incorrect');

      for(let i=0;i<alloptions;i++){
         if(optionlist.children[i].textContent == correctanswer){
            optionlist.children[i].setAttribute('class','option-text correct');
         }
      }
   
      
   }
   for(let i=0;i<alloptions;i++){
      optionlist.children[i].classList.add('disabled');
   }
   nextbtn.classList.add('active');

}



function questioncounter(index){
   const questiontotal=document.querySelector(".question-total");
   questiontotal.textContent=`${index} of ${questions.length} questions`;

}
function resultbox(){
   const resultbox=document.querySelector(".score-btn");
   resultbox.classList.add("active");

   const scoretext=document.querySelector(".score-text");
   scoretext.textContent=`your score is ${userscore} out of ${questions.length}`;
   const circularp=document.querySelector(".circular-progress");
   const circularv=document.querySelector(".progress-value");
   let pstart=0;
   let pend=(userscore/questions.length)*100;
   let speed=20;

   let progress=setInterval(() => {
      pstart++;
      circularv.textContent=`${pstart}%`;
      if(pstart == pend){
         clearInterval(progress);
      }
   }, speed);

}
