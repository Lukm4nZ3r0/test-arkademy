function count_vowels(kata='programmer'){
    kata.split('')
    
    var kataBaru = []
    for(var i = 0 ; i< kata.length ; i++){
        if(kata[i] === 'a' || kata[i] === 'i' || kata[i] === 'u' || kata[i] === 'e' || kata[i] === 'o'){
            kataBaru.push(kata[i])
        }
    }
    return kataBaru.length
}

console.log(count_vowels())