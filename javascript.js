function pow(x, n){ //возвращает x в степени n
    var p;
    p = document.getElementById('pow');
    if (n >= 0){
        result = 1;
        while (n > 0) {
            result *= x;
            n -= 1;
        }
        p.innerHTML += result;
    }
    
}

function nod(a, b) {//наибольший общий делитель двух неотрицательных чисел  a и  b 
    var p;
    p = document.getElementById('nod');
    if ((typeof a !== 'number') || (typeof b !== 'number')) //проверка является ли а и b числом а не чем-то другим
        return false;
    a = Math.abs(a); //модуль числа
    b = Math.abs(b);
    while(b) { //цикл пока не будет 0 в остатке от деления
        var t = b;
        b = a % b;
        a = t;
    }
    p.innerHTML += a;
}

function minDigit(x){ //возвращает наименьшую цифру целого неотрицательного числа x 
    var p;
    p = document.getElementById('minDigit');
    min = x % 10; //остаток от деления
    k = x.toString().length;
    for (let i = 0; i < k; i++){ //Число в строку, далее считает длину строки(сколько в числе цифр)
        num = x % 10;
        if (num < min){min = num;}
        x = Math.floor(x/10); //округление вниз
    }
    p.innerHTML += min;
}

function pluralize(n){
    var p;
    p = document.getElementById('pluralizeRecords');
    var str;
    if (n % 10 == 1){str = 'В результате выполнения запроса была найдена '+ n + ' запись';}
    else if ((n >= 2 && n <= 4) || (n%10 >= 2 && n%10 <=4 && n > 20)){str = 'В результате выполнения запроса было найдено '+ n + ' записи';}
    else {str = 'В результате выполнения запроса было найдено '+ n + ' записей';}

    p.innerHTML = str;
}

function fibb(n){ //вернёт n-ое число из последовательности Фибоначчи
    var p;
    p = document.getElementById('fibb');
    let res;
    if (n == 1 || n == 2){res = 1;}
    else {
        a = 1;
        b = 1;
        for (let i = 3; i <= n; i++){
            res = a + b;
            a = b;
            b = res;
        }
    }
    p.innerHTML += res;
}