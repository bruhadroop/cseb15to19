importScripts('https://www.gstatic.com/firebasejs/7.3.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.3.0/firebase-messaging.js');

  var config = { 
    messagingSenderId: "1059297273439"
  };
  
  firebase.initializeApp(config);
  const messaging = firebase.messaging();
