var a;

function show_hide() {

    if(a==1) {
            document. getElementsByClass("browsed_files_area").style.display="flex";
            return a=1;
        }
    else {
        document. getElementsByClass("browsed_files_area").style.display="none";
        return a=0;
    }
}