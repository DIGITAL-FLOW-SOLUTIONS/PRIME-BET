import { createRouter, createWebHistory } from "vue-router";
import Home from "./pages/Home.vue";
import AmericanFootball from "./pages/AmericanFootball.vue";
import AussieRules from "./pages/AussieRules.vue";
import Bandy from "./pages/Bandy.vue";
import Basketball from "./pages/Basketball.vue";
import Boxing from "./pages/Boxing.vue";
import Cycling from "./pages/Cycling.vue";
import Darts from "./pages/Darts.vue";
import Cricket from "./pages/Cricket.vue";
import ERocketLeague from "./pages/ERocketLeague.vue";
import ECricket from "./pages/ECricket.vue";
import EFighting from "./pages/EFighting.vue";
import EShooter from "./pages/EShooter.vue";
import FifaVolta from "./pages/FifaVolta.vue";
import Floorball from "./pages/Floorball.vue";
import Handball from "./pages/Handball.vue";
import Futsal from "./pages/Futsal.vue";
import IceHockey from "./pages/IceHockey.vue";
import Kabaddi from "./pages/Kabaddi.vue";
import Mma from "./pages/Mma.vue";
import Nba2k from "./pages/Nba2k.vue";
import PenaltyShootout from "./pages/PenaltyShootout.vue";
import Promotions from "./pages/Promotions.vue";
import Rugby from "./pages/Rugby.vue";
import Soccer from "./pages/Soccer.vue";
import Specials from "./pages/Specials.vue";
import Squash from "./pages/Squash.vue";
import TableTenis from "./pages/TableTenis.vue";
import Tennis from "./pages/Tennis.vue";
import VolleyBalls from "./pages/VolleyBalls.vue";
import WaterPolo from "./pages/WaterPolo.vue";
import Wrestling from "./pages/Wrestling.vue";
import CreateAccount from "./pages/CreateAccount.vue";
import LayoutTwo from "./Layouts/LayoutTwo.vue";
import Login from "./pages/Login.vue";
import LayoutThree from "./Layouts/LayoutThree.vue";
import Dashboard from "./pages/Dashboard.vue";
import Forgotpassword from "./pages/forgotpassword.vue";
import ResetPassword from "./pages/ResetPassword.vue";

export const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: "/",
      component: Home,
      meta: { title: "PRIMEBET" },
    },
    // Sports routes
    {
      path: "/american-football",
      component: AmericanFootball,
      meta: { title: "American Football - PRIMEBET" },
    },
    {
      path: "/aussie-rules",
      component: AussieRules,
      meta: { title: "Aussie Rules - PRIMEBET" },
    },
    {
      path: "/bandy",
      component: Bandy,
      meta: { title: "Bandy - PRIMEBET" },
    },
    {
      path: "/basketball",
      component: Basketball,
      meta: { title: "Basketball - PRIMEBET" },
    },
    {
      path: "/boxing",
      component: Boxing,
      meta: { title: "Boxing - PRIMEBET" },
    },
    {
      path: "/cycling",
      component: Cycling,
      meta: { title: "Cycling - PRIMEBET" },
    },
    {
      path: "/cricket",
      component: Cricket,
      meta: { title: "Cricket - PRIMEBET" },
    },
    {
      path: "/darts",
      component: Darts,
      meta: { title: "Darts - PRIMEBET" },
    },
    // eSports routes
    {
      path: "/ecricket",
      component: ECricket,
      meta: { title: "eCricket - PRIMEBET" },
    },
    {
      path: "/efighting",
      component: EFighting,
      meta: { title: "eFighting - PRIMEBET" },
    },
    {
      path: "/erocket-league",
      component: ERocketLeague,
      meta: { title: "eRocket League - PRIMEBET" },
    },
    {
      path: "/eshooter",
      component: EShooter,
      meta: { title: "eShooter - PRIMEBET" },
    },
    // Other sports routes
    {
      path: "/fifa-volta",
      component: FifaVolta,
      meta: { title: "FIFA Volta - PRIMEBET" },
    },
    {
      path: "/floorball",
      component: Floorball,
      meta: { title: "Floorball - PRIMEBET" },
    },
    {
      path: "/futsal",
      component: Futsal,
      meta: { title: "Futsal - PRIMEBET" },
    },
    {
      path: "/handball",
      component: Handball,
      meta: { title: "Handball - PRIMEBET" },
    },
    {
      path: "/ice-hockey",
      component: IceHockey,
      meta: { title: "Ice Hockey - PRIMEBET" },
    },
    {
      path: "/kabaddi",
      component: Kabaddi,
      meta: { title: "Kabaddi - PRIMEBET" },
    },
    {
      path: "/mma",
      component: Mma,
      meta: { title: "MMA - PRIMEBET" },
    },
    {
      path: "/nba-2k",
      component: Nba2k,
      meta: { title: "NBA 2K - PRIMEBET" },
    },
    {
      path: "/penalty-shootout",
      component: PenaltyShootout,
      meta: { title: "Penalty Shootout - PRIMEBET" },
    },
    {
      path: "/promotions",
      component: Promotions,
      meta: { title: "Promotions - PRIMEBET" },
    },
    {
      path: "/rugby",
      component: Rugby,
      meta: { title: "Rugby - PRIMEBET" },
    },
    {
      path: "/soccer",
      component: Soccer,
      meta: { title: "Soccer - PRIMEBET" },
    },
    {
      path: "/specials",
      component: Specials,
      meta: { title: "Specials - PRIMEBET" },
    },
    {
      path: "/squash",
      component: Squash,
      meta: { title: "Squash - PRIMEBET" },
    },
    {
      path: "/table-tennis",
      component: TableTenis,
      meta: { title: "Table Tennis - PRIMEBET" },
    },
    {
      path: "/tennis",
      component: Tennis,
      meta: { title: "Tennis - PRIMEBET" },
    },
    {
      path: "/volleyball",
      component: VolleyBalls,
      meta: { title: "Volleyball - PRIMEBET" },
    },
    {
      path: "/waterpolo",
      component: WaterPolo,
      meta: { title: "Water Polo - PRIMEBET" },
    },
    {
      path: "/wrestling",
      component: Wrestling,
      meta: { title: "Wrestling - PRIMEBET" },
    },
    // Auth routes
    {
      path: "/create-acount",
      component: CreateAccount,
      meta: { layout: LayoutTwo, title: "Create Account - PRIMEBET" },
    },
    {
      path: "/login",
      component: Login,
      meta: { layout: LayoutTwo, title: "Login - PRIMEBET" },
    },
    {
      path: "/dashboard",
      component: Dashboard,
      meta: { layout: LayoutThree, title: "Dashboard - PRIMEBET" },
    },
    {
      path: "/forgot-password",
      component: Forgotpassword,
      meta: { layout: LayoutTwo, title: "Forgot Password - PRIMEBET" },
    },
    {
      path: "/reset-password",
      component: ResetPassword,
      meta: { layout: LayoutTwo, title: "Reset Password - PRIMEBET" },
      props: (route) => ({ token: route.query.token }),
    },
    // Aliases for backward compatibility
    {
      path: "/forgotpassword",
      redirect: "/forgot-password",
    },
    {
      path: "/resetpassword",
      redirect: "/reset-password",
    },
    {
      path: "/create-acount", // Fixing typo in original path
      redirect: "/create-acount",
    },
  ],
});

// Update document title on route change
// router.beforeEach((to, _from, next) => {
//   document.title = to.meta.title || "Oddsx - VueJs Template";
//   next();
// });