// 使用模組檔案的主程式
// 1.1匯入模組檔
import math from './lib67.js';
// 1.2使用
math.add(3,5);
math.multiply(-3,5);

// 2.1.匯入非預設輸出模組檔,要跟匯出的名稱相同
import{add,multiply} from './lib67.js';

// 2.2使用
math.add(3,5);
math.multiply(-3,5);
console.log(add(3,5));