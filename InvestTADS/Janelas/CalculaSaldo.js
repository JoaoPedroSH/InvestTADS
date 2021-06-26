function calcular(){
    var num1 = document.querySelector(".num1").nodeValue;
    var num2 = document.querySelector(".num2").nodeValue;
    var num3 = document.querySelector(".num3").nodeValue;

    var resultado = ((parseFloat(num1) - parseFloat(num2)) - parseFloat(num3));
    document.querySelector(".resultado").innerHTML = resultado;
}