console.log('Hello from service-worker.js');


// 2. 安装


self.addEventListener('install', (event) => {
  console.log('install事件')
  self.skipWaiting() //用来强制更新的servicework跳过等待时间
  event.waitUntil(
    caches.open('CACHE_NAME').then(function (cache) {
      return cache.addAll('/test.js')
    })
  )
})


// 3.激活
self.addEventListener('activate', (event) => {
  console.log('activate事件')
  var cacheWhitelist = ['CACHE_NAME']
  self.clients.claim() // 保证 激活之后能够马上作用于所有的终端
  event.waitUntil(
    caches.keys().then((cacheNames) => {
      return Promise.all(
        cacheNames.map((cacheName) => {
          if (cacheWhitelist.indexOf(cacheName) === -1) {
            return caches.delete(cacheName)
          }
        })
      )
    })
  )
})

// 4.拦截网络请求
self.addEventListener('fetch', (event) => {
  event.respondWith(
    caches.match(event.request).then((response) => {
      if (response) {
        return response;
      }
      return fetch(event.request);
    })
  );
});


self.addEventListener('message', (event)=>{
  console.log('页面传递过来的数据',event.data)  // 收到主线程传递的信息
  event.source.postMessage('this message is from sw.js to page');  // 向主线程传递信息
})

// importScripts('https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js');
 
// if (workbox) {
//   console.log(`Yay! Workbox is loaded 🎉`);
// } else {
//   console.log(`Boo! Workbox didn't load 😬`);
// }


// workbox.routing.registerRoute(
//   /\.js$/,
//   new workbox.strategies.NetworkFirst()
// );
