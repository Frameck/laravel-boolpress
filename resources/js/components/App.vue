<template>
    <div class="overflow-hidden">
        <Header
        title="Homepage Laravel Boolpress"
        subtitle="Sottotitolo della homepage">
        </Header>

        <!-- if no post is fetched from the database -->
        <h2 class="mb-5 text-center" v-if="postsList.length === 0">
            Ancora nessun dato disponibile...
        </h2>

        <section class="row gx-4 gx-lg-5 justify-content-center my-5 mx-3">
            <div class="col-9">
                <div class="row row-cols-2">
                    <PostCard
                    v-for="(post, i) in postsList"
                    :key="post.id + i"
                    :postData="post">
                    </PostCard>
                </div>
            </div>

            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item text-center">
                        <h6>Categorie</h6>
                    </li>
                    <li class="list-group-item list-group-item-action"
                    v-for="(category, i) in categories"
                    :key="category.name + i">
                        <router-link 
                        :to="{ name: 'category.show', params: { category: category.id } }"
                        class="text-decoration-none text-dark">
                            {{ category.name }}
                        </router-link>
                    </li>
                </ul>
            </div>
        </section>

        <div class="d-flex justify-content-center mb-5">
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
            lastPage: undefined,
            categories: []
        }
    },
    methods: {
        getData(page) {
            window.axios.get('/api/posts?page=' + page).then((res) => {
                this.postsList = res.data.data
                this.currentPage = res.data.current_page
                this.lastPage = res.data.last_page
            })
        },
        getCategories() {
            window.axios.get('/api/category').then((res) => {
                this.categories = res.data
            })
        },
    },
    mounted() {
        this.getData(1)
        this.getCategories()
    }
}
</script>

<style>

</style>