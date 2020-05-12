let actions = {
        SEARCH_PRODUCTS({commit}, query) {
            let params = {
                query
            };
            axios.get(`/api/cari`, {params})
                .then(res => {
                    if (res.data === 'ok')
                        console.log('request data berhasil')

                }).catch(err => {
                console.log(err)
            })
        },
        GET_PRODUCTS({commit}) {
            axios.get('/api')
                .then(res => {
                    {
                        commit('menampilkan data', res.data)
                    }
                })
                .catch(err => {
                    console.log(err)
                })
        }
    }

    export default actions