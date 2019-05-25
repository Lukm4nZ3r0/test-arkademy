function betweenDays(start='2019-11-01',end='2019-11-05'){
    var startDay = start.split('-')
    var endDay = end.split('-')

    var startDayInt = parseInt(startDay[2]) //1
    var endDayInt = parseInt(endDay[2]) //6

    var tanggal = '2019-11-'
    var New = []
    for(startDayInt ; startDayInt<endDayInt+1 ; startDayInt++){
        New.push(tanggal+startDayInt)
    }

    return New
}

console.log(betweenDays('2019-11-01','2019-11-05'))