function myBio(){
    var biodata = {
        "name":"Asep Lukman Hakim",
        "Address":"Jl. Mahoni Tengah No F35, GSP. Cirebon. Jawa Barat",
        "hobbies":"Ngoding",
        "is_married":false,
        "school":[{"highSchool":"SMAN 6 Cirebon"},{"university":"UNSWAGATI"}],
        "skills":[
            {
                "name":"PHP",
                "score":90
            },
            {
                "name":"Javascript",
                "score":80
            }
        ],
    }

    return biodata
}

console.log(myBio())