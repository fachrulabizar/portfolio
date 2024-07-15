const CACHE_NAME = 'fachrulabizar-launcher-cache-v1';
const urlsToCache = [
    '/',
    '/index.php',
    '/project.php',
    '/css/style.css',
    '/css/animate.css',
    '/js/custom.js',
    '/js/jquery.counterup.min.js',
    '/js/parallax.min.js',
    '/manifest.json',  
];

self.addEventListener('install', (event) => {
    // Precache files
    event.waitUntil(
        caches.open(CACHE_NAME)
        .then((cache) => {
            return cache.addAll(urlsToCache);
        })
    );
});

self.addEventListener('activate', (event) => {
    // Clean up old caches
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames.filter((cacheName) => {
                    return cacheName !== CACHE_NAME;
                }).map((cacheName) => {
                    return caches.delete(cacheName);
                })
            );
        })
    );
});

self.addEventListener('fetch', (event) => {
    event.respondWith(
        caches.match(event.request)
        .then((response) => {
            if (response) {
                return response;
            }
            return fetch(event.request);
        })
    );
});