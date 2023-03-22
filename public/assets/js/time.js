let countDownDate = new Date("July 1, 2023 23:59:59").getTime();

let x = setInterval(() => {
  let now = new Date().getTime();
  let time = countDownDate - now;

  let days = Math.floor(time / (1000 * 60 * 60 * 24));
  let hours = Math.floor((time % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((time % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((time % (1000 * 60)) / 1000);

  let day = document.getElementsByClassName("day");
  let hour = document.getElementsByClassName("hours");
  let minute = document.getElementsByClassName("minutes");
  let second = document.getElementsByClassName("seconds");

  for (currentDay of day) {
    currentDay.innerHTML = days;
  }
  for (currentHour of hour) {
    currentHour.innerHTML = hours;
  }
  for (currentMinute of minute) {
    currentMinute.innerHTML = minutes;
  }
  for (currentSecond of second) {
    currentSecond.innerHTML = seconds;
  }
}, 1000);
