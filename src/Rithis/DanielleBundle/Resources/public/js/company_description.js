$(function () {
    $("form .add").live('click', function () {
        var collection = this.previousSibling;
        $(collection).append(collection.getAttribute('data-prototype').replace(/__name__/g, collection.childNodes.length));
    });
});
