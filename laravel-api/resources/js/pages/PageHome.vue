<template>
    <div>
        <h1>Quattro post random:</h1>
        <div class="row g-4">
            <div class="col-4" v-for="post in posts" :key="post.id">
                <div class="card h-100">
                    
                    <div class="card-body d-flex flex-column">
                      <img src="https://picsum.photos/seed/picsum/100/100" alt="">
                        <h5 class="card-title fs-2 fw-bold">{{ post.title }}</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, magnam assumenda aut consectetur illo culpa harum repellendus ipsa iusto enim fugiat itaque non sit quaerat saepe delectus similique veritatis error?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nulla beatae consequuntur ipsa, provident adipisci maxime suscipit. Tempore tempora reprehenderit, non quos dolor suscipit, temporibus illum porro reiciendis, minima corrupti.</p>

                        <router-link :to="{name: 'postShow', params: {slug: post.slug}}" class="btn btn-primary mt-auto fw-bold"> VIEW </router-link>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ContainerPosts',
    data() {
        return {
            posts: [],
            baseApiUrl: 'http://localhost:8000/api/v1/posts?home',
        }
    },
    created() {
        this.getData(this.baseApiUrl);
    },
    methods: {
        getData(url) {
            if (url) {
                Axios.get(url)
                .then(res => {
                    this.posts =  res.data.response.data;
                });
            }
        }
    }
}
</script>

<style>
    .page-link {
        cursor: pointer;
    }
</style>
</style>