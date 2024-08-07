const CACHE_NAME = 'fachrulabizar-launcher-cache-v1';
const urlsToCache = [
    '/',
    '/index.php',
    '/project.php',
    '/manifest.json',
    '/README.md',
    '/css/style.css',
    '/css/animate.css',
    '/js/custom.js',
    '/js/jquery.counterup.min.js',
    '/js/parallax.min.js',
    '/images/dots-bg-light.svg',
    '/images/dots-bg.svg',
    '/images/about/IMG_0552_cropped-min.png',
    '/images/favicon/android-chrome-192x192.png',
    '/images/favicon/android-chrome-512x512.png',
    '/images/favicon/apple-touch-icon.png',
    '/images/favicon/favicon-16x16.png',
    '/images/favicon/favicon-32x32.png',
    '/images/favicon/favicon.ico',
    '/images/favicon/site.webmanifest',
    '/images/skills/cloud-computing.png',
    '/images/skills/coding.png',
    '/images/skills/personal-computer.png',
    '/images/skills/router.png',
    '/images/works/app.metechso.com.png',
    '/images/works/fachrulabizar.metechso.com.png',
    '/images/works/localserver.png',
    '/images/works/meface.metechso.com.png',
    '/images/works/metechso.com.png',
    '/images/works/penggajian.png',
    '/images/works/pmb.png',
    '/images/works/point_app.png',
    '/images/works/pos.png',
    '/images/works/presence.png',
    '/images/works/recruitment.metechso.com.png',
    '/images/works/server.png',
    '/images/works/sipalingngadu.png',
    '/images/works/spk.metechso.com.png',
    '/images/works/wsm.co.id.png',
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