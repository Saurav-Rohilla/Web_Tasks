$(document).ready(function () {
    $(".button").click(function (e) {
        e.preventDefault();
        let operator = prompt("Enter the operation you wish to perform: ");
        let result;
        let firstOperand = prompt("First operand: ");
        let secondOperand = prompt("Second operand: ");
        if (!firstOperand || !secondOperand) {
            console.log("Null operands!!!");
        }
        else {
            firstOperand = Number(firstOperand);
            secondOperand = Number(secondOperand);

            const head = (function(){
                function add(a,b)
                {
                    return a+b;
                }
                return {
                    add: add
                }
            })();

            function subtract(firstOperand, secondOperand) {
                result = (firstOperand) - (secondOperand);
            }

            multiply =(firstOperand, secondOperand) =>
                result = (firstOperand) * (secondOperand);
            

            function divide(firstOperand, secondOperand) {
                if (secondOperand == 0) {
                    alert("Denominator cannot be 0");
                }
                else {
                    result = (firstOperand) / (secondOperand);
                }
            }

            switch (operator) {
                case "+":
                    {
                        result = head.add(firstOperand, secondOperand);
                        break;
                    }
                case "-":
                    {
                        subtract(firstOperand, secondOperand);
                        break;
                    }
                case "*":
                    {
                        multiply(firstOperand, secondOperand);
                        break;
                    }
                case "/":
                    {
                        divide(firstOperand, secondOperand);
                        break;
                    }
                default:
                    {
                        alert("Please enter a valid operand");
                    }
            }

            if (isNaN(result)) {
                alert("Invalid operator/operand!!!");
            }
            else {
                console.log("Result : " + result);
            }
        }
    });
});