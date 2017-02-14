'use strict';

//var GCM_ENDPOINT = 'https://android.googleapis.com/gcm/send';
var GCM_ENDPOINT = 'https://aziz-blr.github.io/latest.json';

self.addEventListener('push', function(event) {  
  // Since there is no payload data with the first version  
  // of push messages, we'll grab some data from  
  // an APIvar httpHeaders = new Headers();
    var httpHeaders = new Headers();
    httpHeaders.append('pragma', 'no-cache');
    httpHeaders.append('cache-control', 'no-cache');

    var fetchInit = {
      method: 'GET',
      headers: httpHeaders,
      mode: 'no-cors',
    };

    fetch(GCM_ENDPOINT, fetchInit).then(function(res) {
      res.json().then(function(data) {
            // Show notification
            //console.log(data);
            if (data.data.title == 'no') {
              var title = 'title';
              var message = 'body';  
              var icon = 'https://aziz-blr.github.io/images/icon.png';  
              var notificationTag = 'notification-error';  
              return self.registration.showNotification(title, {  
                body: message,  
                icon: icon,  
                tag: notificationTag  
              }); 
            }else{
              var title = data.data.title;
              var message = data.data.body;  
              var icon = data.data.icon;  
              var notificationTag = 'notification-error';  
              return self.registration.showNotification(title, {  
                body: message,  
                icon: icon,  
                tag: notificationTag  
              });  
            }
                        
          }).catch(function(err) {  
            console.error('Unable to retrieve data', err);

            var title = 'An error occurred';
            var message = 'We were unable to get the information for this push message';  
            var icon = '';  
            var notificationTag = 'notification-error';  
            return self.registration.showNotification(title, {  
              body: message,  
              icon: icon,  
              tag: notificationTag  
            });  
          })  
        })  
});


self.addEventListener('notificationclick', function(event) {
  console.log('On notification click: ', event.notification.tag);
  // Android doesn’t close the notification when you click on it
  // See: http://crbug.com/463146
  event.notification.close();

  // This looks to see if the current is already open and
  // focuses if it is
  event.waitUntil(clients.matchAll({
    type: 'window'
  }).then(function(clientList) {
    for (var i = 0; i < clientList.length; i++) {
      var client = clientList[i];
      if (client.url === '/' && 'focus' in client) {
        return client.focus();
      }
    }
    if (clients.openWindow) {
      return clients.openWindow('/');
    }
  }));
});
