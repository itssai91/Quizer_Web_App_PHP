//install Service Worker
self.addEventListener("install", (evt) => {
  console.log("Service Worker has been installed");
});

//activates Service Worker
self.addEventListener("activate", (evt) => {
  console.log("Service worker has been activated");
});

//fetch event
self.addEventListener("fetch", (evt) => {
  console.log("fetch event", evt);
});
