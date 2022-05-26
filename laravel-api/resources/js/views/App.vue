 <template>
   <div>

       <header-posts/>

       <posts-container/>

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