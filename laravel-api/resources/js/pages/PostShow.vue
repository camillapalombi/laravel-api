<template>
  <div v-if="post">

        <h1>{{ post.title }}</h1>
        <p>{{ post.content }}</p>
        <img class="img-thumbnail" style="width: 200px" :src="post.img_url" :alt="post.title">

      
  </div>
</template>

<script>
export default {
    name: 'PostShow',
    props: ['slug'],
    data() {
        return {
            post: null,
            baseApiUrl: 'http://localhost:8000/api/v1/posts',
        }
    },
    created() {
        this.getData(this.baseApiUrl + '/' + this.slug );
    },
    methods: {
        getData(url) {
            if (url) {
                Axios.get(url)
                .then(res => {
                    if (res.data.success) {
                        this.post =  res.data.response.data;
                    } else {
                        this.$router.push({name: 'page404'});
                    }
                });
            }
        }
    }
}
</script>

<style>

</style>