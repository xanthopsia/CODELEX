<?php

class Video
{
    private string $title;
    private bool $isCheckedOut = false;
    private float $averageRating = 0.0;
    private int $submissionsCount = 0;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function isCheckedOut(): bool
    {
        return $this->isCheckedOut;
    }

    public function checkOut(): void
    {
        $this->isCheckedOut = true;
    }

    public function returnVideo(): void
    {
        $this->isCheckedOut = false;
    }

    public function receiveRating(float $rating): void
    {
        if ($rating >= 1 && $rating <= 5) {
            $this->averageRating = ($this->averageRating * $this->submissionsCount + $rating) / ($this->submissionsCount + 1);
            $this->submissionsCount++;
        }
    }

    public function getAverageRating(): float
    {
        return $this->averageRating;
    }
}

class VideoStore
{
    private array $inventory = [];

    public function addVideo(string $title): void
    {
        $this->inventory[] = new Video($title);
    }

    public function findVideo(string $title): ?Video
    {
        foreach ($this->inventory as $video) {
            if ($video->getTitle() === $title) {
                return $video;
            }
        }
        return null;
    }

    public function rentVideo(string $title): bool
    {
        $video = $this->findVideo($title);

        if ($video && !$video->isCheckedOut()) {
            $video->checkOut();
            return true;
        }
        return false;
    }

    public function returnVideo(string $title): bool
    {
        $video = $this->findVideo($title);

        if ($video && $video->isCheckedOut()) {
            $video->returnVideo();
            return true;
        }
        return false;
    }

    public function listInventory(): array
    {
        return $this->inventory;
    }
}

class Application
{
    private VideoStore $videoStore;

    public function __construct()
    {
        $this->videoStore = new VideoStore();
    }

    public function run(): void
    {
        while (true) {
            $this->displayMenu();

            $command = (int)readline("Enter your choice: ");

            switch ($command) {
                case 0:
                    echo "Bye!";
                    die;
                case 1:
                    $this->addVideo();
                    break;
                case 2:
                    $this->rentVideo();
                    break;
                case 3:
                    $this->returnVideo();
                    break;
                case 4:
                    $this->listInventory();
                    break;
                case 5:
                    $this->rateVideo();
                    break;
                default:
                    echo "Invalid choice. Please try again.\n";
            }
        }
    }

    private function displayMenu(): void
    {
        echo "Choose the operation you want to perform\n";
        echo "0. EXIT\n";
        echo "1. Add a video\n";
        echo "2. Rent a video\n";
        echo "3. Return a video\n";
        echo "4. List inventory\n";
        echo "5. Rate a video\n";
    }

    private function addVideo(): void
    {
        $title = readline("Enter video title: ");
        $this->videoStore->addVideo($title);
        echo "Video '$title' added successfully.\n";
    }

    private function rentVideo(): void
    {
        $title = readline("Enter video title to rent: ");
        if ($this->videoStore->rentVideo($title)) {
            echo "Video '$title' rented successfully.\n";
        } else {
            echo "Video '$title' not found or already checked out.\n";
        }
    }

    private function returnVideo(): void
    {
        $title = readline("Enter video title to return: ");
        if ($this->videoStore->returnVideo($title)) {
            echo "Video '$title' returned successfully.\n";
        } else {
            echo "Video '$title' not found or not checked out.\n";
        }
    }

    private function listInventory(): void
    {
        $inventory = $this->videoStore->listInventory();

        if (empty($inventory)) {
            echo "No videos in inventory.\n";
        } else {
            echo "Video Inventory:\n";
            foreach ($inventory as $video) {
                echo "Title: " . $video->getTitle() . "\n";
                echo "Average Rating: " . number_format($video->getAverageRating(), 2) . "\n";
                echo "Checked Out: " . ($video->isCheckedOut() ? "Yes" : "No") . "\n";
                echo "------------------------\n";
            }
        }
    }

    private function rateVideo(): void
    {
        $title = readline("Enter video title to rate: ");
        $video = $this->videoStore->findVideo($title);

        if ($video) {
            $rating = (float)readline("Enter your rating (1-5): ");
            $video->receiveRating($rating);
            echo "You rated '$title' with $rating stars.\n";
        } else {
            echo "Video '$title' not found in the inventory.\n";
        }
    }
}

$app = new Application();
$app->run();
