console.log('Hello from service-worker.js');


self.addEventListener('install', event => {
  event.waitUntil(() => console.info('安装完成'))
})

self.addEventListener('install', (event) => {
  let CACHE_NAME = 'xyz-cache'
  let urlsToCache = [
      '/',
      '/test.js'
  ]
  event.waitUntil(
      caches.open(CACHE_NAME)
      .then (cache => cache.addAll(urlsToCache))
  )
})

self.addEventListener('activate', (event) => {
  let cacheWhitelist = ['products-v2']
  event.waitUntil(
      caches.keys().then (cacheNames => {
          return Promise.all(
              cacheNames.map( cacheName => {
                  if (cacheWhitelist.indexOf(cacheName) === -1) {
                      return caches.delete(cacheName)
                  }
              })
          )
      })
  )
})

console.log('activate d self',self);

self.addEventListener('activate', (event) => {


  event.waitUntil(
      self.clients.matchAll().then ( 
        (client) => {

          console.log('activate client',client);

          client.postMessage({
              msg: 'Hey, from service worker! I\'m listening to your fetch requests.',
              source: 'service-worker'
          })
      })
  )
})

self.addEventListener('fetch', (event) => {
  event.waitUntil(()=>{
    if (event.request.url.includes('/product')) {
      let productId = event.data.productId
      let productCount = getProductData(productId)
      indexedDB.open('store', 1, (db) => {
        let productStore = db.createObjectStore('products', { keyPath: 'id' })
        productStore.put({ id: productId, count: ++productCount })
      })
    }
  })
})

