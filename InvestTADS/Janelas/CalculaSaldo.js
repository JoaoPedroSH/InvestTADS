function calcular(){
    var num1 = document.querySelector(".num1").nodeValue;
    var num2 = document.querySelector(".num2").nodeValue;
    var num3 = document.querySelector(".num3").nodeValue;


    var resultado = Interger.parseInt(num1) - Interger.parseInt(num2) - Interger.parseInt(num3);
    document.querySelector(".resultado").innerHTML = resultado;
}