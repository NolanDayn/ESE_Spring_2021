
function updateCopyRightYear(){
    elCopyRightYear = document.getElementById("copyrightyear")

    date = new Date()
    year = date.getFullYear()

    console.log(year)
    elCopyRightYear.innerHTML = year
}