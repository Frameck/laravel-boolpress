<template>
    <div class="overflow-hidden">
        <Header></Header>

        <!-- if no post is fetched from the database -->
        <h2 class="mb-5 text-center" v-if="postsList.length === 0">
            Ancora nessun dato disponibile...
        </h2>

        <section class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center my-5 mx-3">
            <PostCard
            v-for="(post, i) in postsList"
            :key="post.id + i"
            :postData="post">
            </PostCard>
        </section>

        <div class="d-flex justify-content-center">
            <ul class="pagination">
                <li>
                    <button class="page-link" @click="(currentPage > 0) ? getData(currentPage - 1) : getData(currentPage)">
                        Indietro
                    </button>
                </li>
                <li v-for="page in lastPage" :key="page" class="page-item" :class="{'active' : currentPage === page}">
                    <button class="page-link" @click="getData(page)">
                        {{ page }}
                    </button>
                </li>
                <li>
                    <button class="page-link" @click="(currentPage < lastPage) ? getData(currentPage + 1) : getData(currentPage)">
                        Avanti
                    </button>
                </li>
            </ul>
        </div>

        <Footer></Footer>
    </div>
</template>

<script>
import Footer from './partials/Footer.vue'
import Header from './partials/Header.vue'
import PostView from './partials/PostView.vue'
import PostCard from './partials/PostCard.vue'

export default {
    name: 'App',
    components: { Footer, Header, PostCard, PostView },
    data() {
        return {
            postsList: [],
            currentPage: 1,
            lastPage: undefined
        }
    },
    methods: {
        getData(page) {
            window.axios.get('/api/posts?page=' + page).then((res) => {
                console.log(res.data)
                this.postsList = res.data.data
                this.currentPage = res.data.current_page
                this.lastPage = res.data.last_page
            })
        },
    },
    mounted() {
        this.getData(1)
    }
}
</script>

<style>

</style>