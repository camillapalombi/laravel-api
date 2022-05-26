<template>
    <div>
        <div class="row g-4">
            <div class="col-4" v-for="post in posts" :key="post.id">
                <div class="card h-100">
                    
                    <div class="card-body d-flex flex-column">
                      <img src="https://picsum.photos/seed/picsum/100/100" alt="">
                        <h5 class="card-title fs-2 fw-bold">{{ post.title }}</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio, magnam assumenda aut consectetur illo culpa harum repellendus ipsa iusto enim fugiat itaque non sit quaerat saepe delectus similique veritatis error?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad nulla beatae consequuntur ipsa, provident adipisci maxime suscipit. Tempore tempora reprehenderit, non quos dolor suscipit, temporibus illum porro reiciendis, minima corrupti.</p>
                        <a :href="'/posts/' + post.slug" class="btn btn-primary mt-auto fw-bold">VIEW</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="text-center">
                Page {{ nCurrentPage }} of {{ nLastPage }}
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item" :class="{disabled: nCurrentPage == 1}" @click="getData(firstPageUrl)">
                        <a class="page-link">First</a>
                    </li>
                    <li class="page-item" :class="{disabled: !prevPageUrl}" @click="getData(prevPageUrl)">
                        <a class="page-link">Previous</a>
                    </li>


                    <li class="page-item">
                        <form @submit.prevent="getData(baseApiUrl + '/?page=' + nNewPage)">
                            <input type="text" name="" id="" v-model="nNewPage">
                        </form>
                    </li>

                    <li class="page-item" :class="{disabled: !nextPageUrl}" @click="getData(nextPageUrl)">
                        <a class="page-link">Next</a>
                    </li>
                    <li class="page-item" :class="{disabled: nCurrentPage == nLastPage}" @click="getData(lastPageUrl)">
                        <a class="page-link">Last</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</template>

<script>
export default {
    name: 'ContainerPosts',
    data() {
        return {
            posts: [],
            baseApiUrl: 'http://localhost:8000/api/posts',
            nNewPage: null,
            prevPageUrl: null,
            nextPageUrl: null,
            firstPageUrl: null,
            lastPageUrl: null,
            nCurrentPage: null,
            nLastPage: null,
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
                    this.prevPageUrl = res.data.response.prev_page_url;
                    this.nextPageUrl = res.data.response.next_page_url;
                    this.firstPageUrl = res.data.response.first_page_url;
                    this.lastPageUrl = res.data.response.last_page_url;
                    this.nCurrentPage = res.data.response.current_page;
                    this.nLastPage = res.data.response.last_page;
                    this.nNewPage = null;
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
