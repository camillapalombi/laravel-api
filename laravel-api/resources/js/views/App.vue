 <template>
   <div>

       <header-posts/>

       <router-view></router-view>

   </div>
 </template>
 
 <script>
import HeaderPosts from '../components/HeaderPosts.vue';
import PostsContainer from  '../components/PostsContainer.vue';

export default {
    name: 'App',
    components: {
        HeaderPosts,
        PostsContainer
    }
}
 </script>
 
 <style>
 
 </style>