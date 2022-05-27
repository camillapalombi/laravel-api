 <template>
   <div>

       <header-posts/>

       <router-view></router-view>

   </div>
 </template>
 
 <script>
import HeaderPosts from '../components/HeaderPosts.vue';

export default {
    name: 'App',
    components: {
        HeaderPosts,
    }
}
 </script>
 
 <style>
 
 </style>