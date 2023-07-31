// 建立加法函式
let add = function (n1, n2) {
    console.log(n1 + n2);
}

//建立乘法函式
let multiply = function (n1, n2) {
    console.log(n1 * n2);
}
// 建立math物件 包裝加法與乘法兩個函式
let math = {
    add: add,
    multiply: multiply
}

// 預設的輸出
export default math;
// 非預設的輸出
export { add, multiply };