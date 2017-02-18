'use strict';

var GCM_ENDPOINT = 'https://aziz-blr.github.io/latest.json';

self.addEventListener('push', function(event) {  
  // Since there is no payload data with the first version  
  // of push messages, we'll grab some data from  
  // an API and use it to populate a notification  
  event.waitUntil(  
    fetch(GCM_ENDPOINT).then(function(response) {  
      
      // Examine the text in the response  
      return response.json().then(function(data) {  
        
        var title = data.notification.title;  
        var message = data.notification.message;  
        var icon = data.notification.icon;  
        var notificationTag = data.notification.tag;

        return self.registration.showNotification(title, {  
          body: message,  
          icon: icon,  
          tag: notificationTag  
        });  
      });  
    }).catch(function(err) {  
      console.error('Unable to retrieve data', err);

      var title = 'An error occurred';
      var message = 'We were unable to get the information for this push message';  
      var icon = 'https://aziz-blr.github.io/images/icon.png';  
      var notificationTag = 'notification-error';  
      return self.registration.showNotification(title, {  
          body: message,  
          icon: icon,  
          tag: notificationTag  
        });  
    })  
  );  
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
    // for (var i = 0; i < clientList.length; i++) {
    //   var client = clientList[i];
    //   if (client.url === event.notification.url && 'focus' in client) {
    //     return client.focus();
    //   }      
    // }
    // if (clients.openWindow) {
    //   return clients.openWindow(event.notification.url);
    // }
    window.location = event.notification.url;
  }));
});
