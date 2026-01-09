const CACHE_NAME = 'revendefacil-cache-v1';
const urlsToCache = [
  '/',
  '/index.html',
  '/checkout.html',
  '/assets/css/style.css'
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => cache.addAll(urlsToCache))
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request).then(response => response || fetch(event.request))
  );
});
