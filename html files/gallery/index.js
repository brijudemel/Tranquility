const songTitle = document.querySelector(".song-title");
const thumbnail = document.querySelector("#thumbnail");
const BG = document.querySelector("#BG");
const pp = document.querySelector("#pp");
const progressBar = document.querySelector("#progressBar");
const song = document.querySelector("#song");
var playing = true;
var songs =["1.mp3","2.mp3","3.mp3","4.mp3","5.mp3","6.mp3","7.mp3","8.mp3","9.mp3","10.mp3","21.mp3","22.mp3","23.mp3","24.mp3","25.mp3","26.mp3","27.mp3","28.mp3","29.mp3","30.mp3","11.mp3","12.mp3","13.mp3","14.mp3","15.mp3","16.mp3","17.mp3","18.mp3","19.mp3","20.mp3"],
  songIndex = 0;
(thumbnails = ["https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRR4a_RYGj2RfLFyZzPmNtyffWYTV2PXUN4MA&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQOvbRZQNXh0wupLLhIhllzjYZ41Z14sAL7rw&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQEZ_GNBEYnHrUkmgu5alTameGuHefIeYJDyw&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQuGE32Ee9KyR4ev3tqzRq7aqFAr_iuVnxF7A&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSGheQSsJUF2nR_6O3h5OmF6nIUOJEfpacMbA&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQKR6sJfBmLvgCgrT9gg4uu4wY7B17Si0C3TQ&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcT9WEo9aw5xUzlM4qNOP_caE6YqepPNOEu1Wg&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTCf7a-9GOPRkM5W32lyMQSG_tlaanDduTWbg&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS83eMqBiFFpOVTY2vhD_Hf_aXSvmFicYeWMQ&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRAMMwY18SSpn73GUF9SOgYWj1cq9Wr-364MQ&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTxPFLg-KKqoiEraECYf_FKgAasDbAHvSEEtA&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQojtXICroTo7MhsPNRk_snDeyVnI1FOaOV8Q&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTyJSNk22bbwrP9Nmj4Po9-RmdbaCulywXwwg&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSGwsSsn7YYZaPI1ME-xqGwKcnO7J9w5naPBQ&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTpYFTHrs2KcjP38zK-Kazs1MVydWP87q2LYw&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTUSFYYfNAOsDvjI40E4gF8NPAbEvUwzTe7Qg&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRNbV7NEeuB0C8Q6H5TilKFUaSmdRl0P9E1RQ&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQa_7GamYMIsVc38rt4qMkXxYuK1JvHM6yKLw&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTjzE0WDJff9bDA6x_lfK6Hsd9rJ8CY783vBA&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSWaLO50h1X-jrufRiBLvJ-CDTqzRTkLt1agg&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTz3_YmvkUuGEJdPCwvHVN_qs3d0Z9xT1D8Lw&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRDYRYnBXhvlZfP5H1-5vGiYm5sKyPA19lGrw&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSNssnoi70zH_nlcwGj5w2LNdTsMwXT1lGyww&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSvLh7MM_jBA4pO18Mr86aQPalCA07N86H_KQ&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRn2SsfZ9EJ6lbuBDI6XohWGinlhshZZU6lsg&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRqV0EYMxr98hXmI8LEMtQlB3Hkti26Hxxxtw&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSmU7-_KuEj7uLW_FgaRXaw00gw-bbFJeARSQ&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRmIUum2gvDoQu684tPSyIBOTqCqBka1izgOQ&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTz3_YmvkUuGEJdPCwvHVN_qs3d0Z9xT1D8Lw&usqp=CAU","https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcROI2tumXYwGK-DVsj8iNPUiHFhwr7BxlAPQg&usqp=CAU"]),
  (songNames = [
    "Fall",
    "Bright",
    "Rise",
    "Ross",
    "Blue Bird",
    "Ambience",
    "Flow",
    "Puruty lake",
    "Simply being",
    "Rainbow",
    "White noise",
    "Infinite cosmos",
    "simple serenity",
    "New shores",
    "Let the river flow",
    "Ambience",
    "Emerald island",
    "Simply being",
    "Grass stems",
    "Simply being",
    "Rainbow glimmer",
    "Inner peace",
    "little fall",
    "Newborn lillaby",
    "Little waves",
    "Quiet child",
    "More serene baby",
    "All day tranquility",
    "Better Flow",
    "lake",
    "Simply being",
    "Rainbow",
    "White Pink"

  ]);

function playPause() {
  if (playing) {
    const song = document.querySelector("#song"),
      pp = document.querySelector("#pp"),
      thumbnail = document.querySelector("#thumbnail");
    pp.src = "https://icons-for-free.com/iconfiles/png/512/music+pause+play+stop+icon-1320185671881968262.png";
    song.play(); //plays the song
    playing = false;
    thumbnail.style.width = "160%";
  } else {
    pp.src = "http://www.iconarchive.com/download/i91182/icons8/windows-8/Media-Controls-Play.ico";
    song.pause(); //pauses the song
    playing = true;
    thumbnail.style.width = "130%";
  }
}

function nextSong() {
  songIndex++;
  if (songIndex > songs.length-1) songIndex = 0;
  document.querySelector("#song").src = songs[songIndex];
  document.querySelector("#thumbnail").src = thumbnails[songIndex];
  document.querySelector("#BG").src = thumbnails[songIndex];
  playPause();
  document.querySelector(".song-title").innerHTML = songNames[songIndex];
}

function previousSong() {
  songIndex--;
  if (songIndex < 0) songIndex = songs.length-1;
  document.querySelector("#song").src = songs[songIndex];
  document.querySelector("#thumbnail").src = thumbnails[songIndex];
  document.querySelector("#BG").src = thumbnails[songIndex];
  playPause();
  document.querySelector(".song-title").innerHTML = songNames[songIndex];
}

function updateProgressValue() {
  const progressBar = document.querySelector("#progressBar");
  progressBar.max = document.querySelector("#song").duration;
  progressBar.value = document.querySelector("#song").currentTime;
}

setInterval(updateProgressValue, 700);
