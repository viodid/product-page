
function listen() {
    document.getElementById('productType').addEventListener('change', function () {
        var option = document.getElementsByTagName('select').productType.value;
        extendForm(option)
    })
}

function extendForm(option) {
    var dynamicForm = document.getElementById('dynamic-form');
    // Remove child nodes in case the type switcher changes
    removeChildNodes(dynamicForm);
    switch (option) {
        case 'dvd':
            createLabelInputNodes(['Size (MB)'],
                ['size'],
                'number',
                dynamicForm);
            createProductDescription('size in (MB)', dynamicForm);
            break
        case 'furniture':
            createLabelInputNodes(['Length (CM)', 'Width (CM)', 'Height (CM)'],
                ['length', 'width', 'height'],
                'number',
                dynamicForm);
            createProductDescription('dimensions in (HxWxL)', dynamicForm);
            break
        case 'book':
            createLabelInputNodes(['Weight (KG)'],
                ['weight'],
                'number',
                dynamicForm);
            createProductDescription('weight in (Kg)', dynamicForm);
            break
    }
}

function removeChildNodes(parent) {
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
    }
}
// Recursive function 
function createLabelInputNodes(labels, ids, type, parent) {
    while (labels.length > 0) { //Base case
        var nodeLabel = document.createElement('label');
        var nodeInput = document.createElement('input');
        var textnode = document.createTextNode(labels[labels.length - 1]);
        nodeInput.id = ids[ids.length - 1];
        nodeInput.name = ids[ids.length - 1];
        nodeInput.type = type;
        nodeInput.required = 'yes';
        // Appending nodes to the document
        nodeLabel.appendChild(textnode);
        parent.appendChild(nodeLabel);
        parent.appendChild(nodeInput);
        // Removing used label and id from the array params
        labels.pop();
        ids.pop();
        // Calling the function again with the remaining data
        createLabelInputNodes(labels, ids, type, parent);
    }
}

function createProductDescription(description, parent) {
    var nodeP = document.createElement('p');
    var textnode = document.createTextNode('Please, provide ' + description);
    nodeP.appendChild(textnode);
    parent.appendChild(nodeP);
}

document.addEventListener("DOMContentLoaded", listen);