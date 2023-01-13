// var 宣告內容為全域變數，在任何地方呼叫都可以辨識
var varX = 2;
function cal() {
    // 外面已有用 var 宣告 varX 變數，所以會叫出 2
    console.log('ex varX', varX);
    // varX 重複宣告會被後者蓋過(此區為作用區域覆蓋)
    // var varX = 5;
    // var varY = 1;
    // console.log('varX+varY', varX + varY);
    // 若直接在此區域內對 varX 附值，會直接對全域做變動
    // varX = 6;
}

cal();
console.log('varX', varX);
// varY 宣告的位置為 function 內，所以在 function 外呼叫會 undefined
// console.log('varX+varY', varX + varY);

