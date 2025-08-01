(function () {
    "use strict";

    const tour = new Shepherd.Tour({
        defaultStepOptions: {
            cancelIcon: {
                enabled: true
            },
            classes: 'class-1 class-2',
            scrollTo: { behavior: 'smooth', block: 'center' }
        },
        useModalOverlay: {
            enabled: true,
        }
    });

    tour.addStep({
        id: 'step-1',
        title: "Welcome to the Knowledge Base",
        text: 'Explore helpful resources, articles, and solutions designed to assist you with various topics and issues.',
        attachTo: {
            element: '#step-1',
            on: 'bottom',
        },
        buttons: [
            {
                text: 'Next',
                action: tour.next,
            },
        ],
    });

    tour.addStep({
        id: 'step-2',
        title: "Search for Topics",
        text: 'Find articles and tutorials by searching for keywords, categories, or frequently asked questions.',
        attachTo: {
            element: '#step-2',
            on: 'bottom',
        },
        buttons: [
            {
                text: 'Next',
                action: tour.next,
            },
        ],
    });

    tour.addStep({
        id: 'step-3',
        title: "FAQ Section",
        text: 'Our FAQ section covers common questions and provides quick answers to help resolve common issues.',
        attachTo: {
            element: '#step-3',
            on: 'bottom',
        },
        buttons: [
            {
                text: 'Next',
                action: tour.next,
            },
        ],
    });

    tour.addStep({
        id: 'step-4',
        title: "Step-by-Step Guides",
        text: 'Access detailed guides to help you solve specific problems or complete tasks efficiently.',
        attachTo: {
            element: '#step-4',
            on: 'bottom',
        },
        buttons: [
            {
                text: 'Next',
                action: tour.next,
            },
        ],
    });

    tour.addStep({
        id: 'step-5',
        title: "Community Support",
        text: 'Join discussions, ask questions, and share insights with other users in the community forum.',
        attachTo: {
            element: '#step-5',
            on: 'bottom',
        },
        buttons: [
            {
                text: 'Next',
                action: tour.next,
            },
        ],
    });

    tour.addStep({
        id: 'step-6',
        title: "Support Tickets",
        text: 'Submit a support ticket for personalized help from our team if you can’t find the solution you need.',
        attachTo: {
            element: '#step-6',
            on: 'bottom',
        },
        buttons: [
            {
                text: 'Next',
                action: tour.next,
            },
        ],
    });
    
    tour.addStep({
        id: 'step-7',
        title: "Stay Updated",
        text: 'Check out the latest updates, new features, and improvements to keep your knowledge current.',
        attachTo: {
            element: '#step-7',
            on: 'bottom',
        },
        buttons: [
            {
                text: 'Finish',
                action: tour.next,
            },
        ],
    });

    tour.start();

})();
