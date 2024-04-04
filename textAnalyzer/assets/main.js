let str = prompt("Enter the string: ");
str = str.toLowerCase();
console.log(str);

let operation = (prompt("Enter the operation:/'vowel' for vowels/'alphabet' for aplphabets/'space' for spaces/'digit' for digits/'special' for special characters/'word' for words/'avg' for average word length/'consonant' for consonants/'character' for characters:"));
operation = operation.toLowerCase();
console.log("Operation choosen:" + operation);
let vowels = 0;
let spaces = 0;
let digits = 0;
let alphabets = 0;
let specials = 0;
let words = 0;
let average = 0;


function vowel() {
    for (let x in str) {
        if (str[x] == 'a' || str[x] == 'e' || str[x] == 'i' || str[x] == 'o' || str[x] == 'u') {
            vowels++;
        }
    }
    console.log("Vowels:" + vowels);
}

function alphabet() {

    for (let x in str) {
        if (str.charCodeAt(x) >= 97 && str.charCodeAt(x) <= 122) {
            alphabets++;
        }
    }
    console.log("Alphabets:" + alphabets);
}

function space() {
    for (let x in str) {
        if (str.charCodeAt(x) == 32) {
            spaces++;
        }
    }
    console.log("Spaces:" + spaces);
}

function digit() {
    for (let x in str) {
        if (str[x] >= 0 && str[x] <= 9 && str.charCodeAt(x) != 32)//else if(str[x]/1 == str[x])
        {
            digits++;
        }
    }
    console.log("Digits:" + digits);
}

function special() {
    for (let x in str) {
        if (str[x] == '_' || str[x] == '$' || str[x] == '%') {
            specials++;
        }
    }
    console.log("Specials:" + specials);
}

function word() {
    str = str.split(" ");
    console.log(str);
    for(let x in str)
    {
        if(str[x] != " " && str[x] != "")
        {
            words++;
        }
    }
    console.log("Words:" + words);
}

function avgWordLength() {
    let result = [];
    let count = 0;
    let sum =0 ;
    let arr = str.split(" ");
    for (let x in arr) {
        if (arr[x] != " " && arr[x] != 0) {
            count++;
            result[x] = arr[x].length;
        }
    }
    for(let y in result)
    {
        sum = sum + result[y];
    }
    if(count>0)
    {
        console.log("Average word length:" + (sum/count));
    }
}



switch (operation) {
    case 'vowel':
        vowel();
        break;

    case 'alphabet':
        alphabet();
        break;

    case 'space':
        space();
        break;

    case 'digit':
        digit();
        break;

    case 'consonant':
        alphabet();
        vowel();
        console.log("Consonant:" + (alphabets - vowels));
        break;

    case 'character':
        space();
        console.log("Characters: " + (str.length - spaces));
        break;

    case 'special':
        special();
        break;

    case 'word':
        word();
        break;

    case 'avg':
        avgWordLength();
        break;

    default:
        alert("Impossible operation!!!");

}


