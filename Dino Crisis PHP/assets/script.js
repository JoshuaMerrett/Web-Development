//Navigation Bar Scorll
$(window).on('scroll', function () { //Creates a scroll function
    if ($(window).scrollTop()) {
        $('nav').addClass('black'); //Changes the colour of the navigation bar to black when the scroll is detected.
    }
    else { //If the scroll hasnt been detected then the code will be executed.
        $('nav').removeClass('black'); //While the user hasn't scrolled down the colour will not change.
    }
})

//Date and Time

function showDataTime() {
    var date = new Date(); //Assign the variable date of a new date.

    var day = date.getDate(); //Assigns the getDate feature to the day variable, this gets the date from the systems internal clock.
    var month = date.getMonth() + 1; //Assigns the getMonth feture to the month varibale and adds 1 to the variable.
    var year = date.getFullYear(); //Assigns the getFullYear feature to the year variable, this gets the date from the systems internal clock.

    $("#date").text(day + "/" + month + "/" + year); //When the class of date is called it will displaye the variables day, month and year.

    //Time

    var hour = date.getHours(); //Assigns the getHours feature to the hour variable, this gets the date from the systems internal clock.
    var minute = date.getMinutes(); //Assigns the getMinates feature to the minute variable, this gets the date from the systems internal clock.
    var second = date.getSeconds(); //Assigns the getSeconds feature to the second variable, this gets the date from the systems internal clock.

    if (minute < 10) //If the minute variable is less than 10 then the code below will execute.
    {
        minute = "0" + minute; //The minute variable will be set to the calculation of 0 + what is currently stored in the minute variable.
    }
    if (second < 10) //If the second variable is less than 10 then the code below will execute.
    {
        second = "0" + second; //The second variable will be set to the calculation of 0 + what is currently stored in the second variable.
    }
    if (hour < 10) //If the hour variable is less than 10 then the code below will execute.
    {
        hour = "0" + hour; //The hour variable will be set to the calculation of 0 + what is currently stored in the hour variable.
    }

    $("#time").text(hour + ":" + minute + ":" + second); //When the class of time is called it will displaye the variables hour, minute and second.

    setTimeout(showDataTime, 1000); //This sets the date and time to be shown and sets the interval of seconds to 1000, resulting in the time being set in a familiar format.
}

showDataTime(); //This line of code will allow the data and time to display in the correct format.
