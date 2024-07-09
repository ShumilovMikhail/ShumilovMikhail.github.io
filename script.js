"use strict";

const loadSubscriptions = async (path) => {
  try {
    const response = await fetch(path);
    if (!response.ok) {
      throw new Error('subscription loading error')
    };
    return await response.json();
  } catch (error) {
    throw Error(`subscriptions error ${error}`)
  }
}

const displaySubscriptions = (subscriptions, containerElement) => {
  for( const subscription of subscriptions) {
    containerElement.appendChild(createSubscriptionElement(subscription))
  }
}

const createSubscriptionElement = (subscription) => {
  const subscriptionElement = document.createElement('li');
  subscriptionElement.classList.add('subscriptions-item', subscription.type);
  const createChildElementsFunctions = {
    image: (image) => {
      const subscriptionImageContainerElement = document.createElement('div');
      subscriptionImageContainerElement.classList.add('image__container');
      const subscriptionImageElement = document.createElement('img');
      subscriptionImageElement.classList.add('image');
      subscriptionImageElement.src = image.url;
      subscriptionImageElement.alt = image.alt;
      subscriptionImageContainerElement.appendChild(subscriptionImageElement);
      return subscriptionImageContainerElement;
    },
    title:(title) => {
      const titleElement = document.createElement('h3');
      titleElement.innerText = title;
      return titleElement
    },
    description: (description) => {
      const descriptionElement = document.createElement('p');
      descriptionElement.innerText = description;
      return descriptionElement
    },
    period: (period) => {
      const periodElement = document.createElement('span');
      periodElement.innerText = `Срок подписки: ${period}`;
      return periodElement
    },
    button: () => {
      const buttonElement = document.createElement('button');
      buttonElement.innerText = 'Выбрать';
      return buttonElement
    },
  }

  for(const key in createChildElementsFunctions) {
    subscriptionElement.appendChild(createChildElementsFunctions[key](subscription[key]));
  }
  return subscriptionElement
}

const subscriptionsListElement = document.querySelector('#subscriptions')
loadSubscriptions('subscriptions-data.json').then(subscriptions => displaySubscriptions(subscriptions,subscriptionsListElement));