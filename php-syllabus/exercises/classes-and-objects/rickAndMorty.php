<?php

class Episode
{
    private int $id;
    private string $name;
    private int $rating = 0;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setRating(int $rating): void
    {
        if ($rating >= 1 && $rating <= 10) {
            $this->rating = $rating;
        }
    }

    public function getRating(): int
    {
        return $this->rating;
    }
}

class VideoStore
{
    private array $inventory = [];

    public function listEpisodes(): void
    {
        $episodes = json_decode(file_get_contents('https://rickandmortyapi.com/api/episode'));
        $id = 1;

        if (empty($episodes->results)) {
            echo "No episodes found." . PHP_EOL;
            die;
        } else {
            foreach ($episodes->results as $episode) {
                $newEpisode = new Episode($id, $episode->name);
                $this->inventory[] = $newEpisode;
                $id++;
            }
        }
    }

    public function getInventory(): array
    {
        return $this->inventory;
    }

    public function saveRatingsToFile()
    {
        $ratings = [];
        foreach ($this->inventory as $episode) {
            $ratings[] = [
                'id' => $episode->getId(),
                'rating' => $episode->getRating(),
            ];
        }
        file_put_contents('ratings.json', json_encode($ratings));
    }

    public function loadRatingsFromFile()
    {
        if (file_exists('ratings.json')) {
            $ratings = json_decode(file_get_contents('ratings.json'), true);
            foreach ($ratings as $rating) {
                $episode = $this->inventory[$rating['id'] - 1];
                if (isset($rating['rating'])) {
                    $episode->setRating((int)$rating['rating']);
                }
            }
        }
    }
}

class Application
{
    private VideoStore $videoStore;

    public function __construct()
    {
        $this->videoStore = new VideoStore();
        $this->videoStore->listEpisodes();
        $this->videoStore->loadRatingsFromFile();
    }

    public function run()
    {
        while (true) {
            echo "------------------------------------------------------------------\n";
            echo "Enter 0 for EXIT\n";
            echo "Enter 1 to list episodes\n";
            echo "Enter 2 to rate an episode\n";

            $command = (int)readline("Choose the operation you want to perform: ");
            echo "------------------------------------------------------------------\n";

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->listEpisodes();
                    break;
                case 2:
                    $this->rateEpisode();
                    break;
                default:
                    echo "Sorry, we don't have such option as " . $command . PHP_EOL;
            }
        }
    }

    private function listEpisodes()
    {
        echo "Episodes List:" . PHP_EOL;
        $episodes = $this->videoStore->getInventory();
        foreach ($episodes as $id => $episode) {
            echo "ID: " . ($id + 1) . PHP_EOL;
            echo "Episode Name: " . $episode->getName() . PHP_EOL;
            echo "Rating: " . $episode->getRating() . PHP_EOL;
            echo '--------------------------------------------------' . PHP_EOL;
        }
    }

    private function rateEpisode()
    {
        $id = (int)readline("Enter episode ID (1-20) to rate: ");

        if ($id < 1 || $id > count($this->videoStore->getInventory())) {
            echo "Invalid episode ID. Please enter a valid ID." . PHP_EOL;
            return;
        }

        $episode = $this->videoStore->getInventory()[$id - 1];
        $rating = (int)readline("Enter your rating (1-10) for episode '{$episode->getName()}': ");

        if ($rating < 1 || $rating > 10) {
            echo "Invalid rating. Rating must be between 1 and 10." . PHP_EOL;
        } else {
            $episode->setRating($rating);
            echo "You rated '{$episode->getName()}' with a rating of $rating." . PHP_EOL;
            $this->videoStore->saveRatingsToFile();
        }
    }
}

$app = new Application();
$app->run();
