import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioMasonrySix } from './portfolio-masonry-six';

describe('PortfolioMasonrySix', () => {
  let component: PortfolioMasonrySix;
  let fixture: ComponentFixture<PortfolioMasonrySix>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioMasonrySix]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioMasonrySix);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
