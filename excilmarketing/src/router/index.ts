import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/Home.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),

  routes: [
  {
    path: "/",
    name: "Home",
    component: HomeView,
    meta: {
      Navbar: true,
    },
  },
  {
    path: "/about",
    name: "About",
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () =>
      import(/* webpackChunkName: "about" */ "../views/About.vue"),
      meta: {
        Navbar: true,
      },
  },{
    path:"/CreateAppointment",
    name:"CreateApp",
    component:()=> import("../views/App.vue"),meta: {
      Navbar: true,
    },
  }
   , 
   { path: '/404',component: () => import("../views/404.vue"),meta: {
    hideNavbar: true,
  }, },  
{ path: '/:catchAll(.*)', redirect: '/404' },    
   
   
   
  {
    path: "/Products",
    name: "Products",
    component: () => import("../views/Products.vue"),meta: {
     Navbar: true,
    },
  }, {
    path: "/Preview/:id",
    name: "Preview",
    component: () => import("../components/jobpreview.vue"),
    props:true,
    meta: {
     Navbar: true,
    },
  }, {
    path: "/Create",
    name: "Create",
    component: () => import("../components/Create.vue"),
    props:true, meta: {
    Navbar: true,
    },
  },
  {
    path: "/Apply/:id/:title",
    name: "Apply",
    component: () => import("../components/Apply.vue"),
    props:true ,meta: {
      Navbar: true,
    },
  },
  {
    path: "/Vacancies",
    name: "Vacancies",
    component: () => import("../views/Recruitment.vue"),meta: {
      Navbar: true,
    },
  },{
    path: "/Projects",
    name: "Projects",
    component: () => import("../views/Projects.vue"),meta: {
      Navbar: true,
    },
  },
  {
    path: "/Contact",
    name: "Contact",
    component: () => import("../views/Contact.vue"),meta: {
     Navbar: true,
    },
  },
  {
    path: "/Privacy",
    name: "Privacy",
    component: () => import("../views/Privacy.vue"),meta: {
      Navbar: true,
    },
  },
  {
    path: "/Services",
    name: "Service",
    component: () => import("../views/Service.vue"),meta: {
     Navbar: true,
    },
  },{
    path: "/Events",
    name: "Events",
    component: () => import("../views/Events.vue"),meta: {
      Navbar: true,
    },
  },
  {
    path: "/Login",
    name: "Login",
    component: () => import("../views/Login.vue"),meta: {
      Navbar: true,
    },
  },
  {
    path: "/Dashboard",
    name: "Dashboard",
    component: () => import("../views/Dashboard.vue"),
    children: [
      {
        // UserProfile will be rendered inside User's <router-view>
        // when /user/:id/profile is matched
        path: "/home",
       
        component: () =>
          import(/* webpackChunkName: "about" */ "../components/Home.vue")
      },
      {
        // UserProfile will be rendered inside User's <router-view>
        // when /user/:id/profile is matched
        path: "/Productsadd",
       
        component: () =>
          import(
            /* webpackChunkName: "about" */ "../components/ProductsAdd.vue"
          )
      },{
        path:"/ViewAppointments",
        name:"ViewAppointments",
        component:()=> import("../components/ViewAppointments.vue")
      },
      {
        // UserPosts will be rendered inside User's <router-view>
        // when /user/:id/posts is matched
        path: "/Projectsadd",
        component: () =>
          import(
            /* webpackChunkName: "about" */ "../components/Projectsadd.vue"
          )
      },
      {
        // UserPosts will be rendered inside User's <router-view>
        // when /user/:id/posts is matched
        path: "/Eventsadd",
        component: () =>
          import(
            /* webpackChunkName: "about" */ "../components/Eventsadd.vue"
          )
      },{
        path:"/Messages",
        component:()=>
        import(
          "../components/contact.vue" )
      }
    ]
  }
]
})

export default router
