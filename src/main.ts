import { createApp } from "vue";
import App from "./App.vue";
import "./style.css";
import { router } from "./route";
import "./assets/scss/style.scss";

router.beforeEach((to) => {
  if (to.meta && typeof to.meta.title === "string") {
    document.title = to.meta.title;
  } else {
    document.title = "Default Title";
  }
  window.scrollTo(0, 0);
});

const app = createApp(App);

app.use(router);

app.mount("#app");
