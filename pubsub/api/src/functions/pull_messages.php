<?php
/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * For instructions on how to run the full sample:
 *
 * @see https://github.com/GoogleCloudPlatform/php-docs-samples/tree/master/pubsub/README.md
 */

namespace Google\Cloud\Samples\PubSub;

# [START pull_message]
use Google\Cloud\PubSub\PubSubClient;

/**
 * Pulls all Pub/Sub messages for a subscription.
 *
 * @param string $projectId  The Google project ID.
 * @param string $subscriptionName  The Pub/Sub subscription name.
 */
function pull_messages($projectId, $subscriptionName)
{
    $pubsub = new PubSubClient([
        'projectId' => $projectId,
    ]);
    $subscription = $pubsub->subscription($subscriptionName);
    foreach ($subscription->pull() as $message) {
        printf('Message: %s' . PHP_EOL, $message->data());
    }
}
# [END pull_message]
