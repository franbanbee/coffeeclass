function msg(str1) {
    console.log(str1);
}

function add(n1,n2){
    console.log(n1+n2);
}

// 匯出
export default{
    msg:msg,
    add:add
}