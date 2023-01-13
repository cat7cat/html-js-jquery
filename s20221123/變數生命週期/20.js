
 var varX=2 ;  
 function cal(){   
     console.log('varX:', varX); //因為Hoisting所以varX為undefined
     var varX = 5 ;  
     console.log('varX:', varX); //function內的varX已經賦值所以現在varX == 5;
 }
 //如果沒有宣告function內的varX = 5 ;,函式會往外的執行環境找變數,
 //varX的值就會是2

cal();